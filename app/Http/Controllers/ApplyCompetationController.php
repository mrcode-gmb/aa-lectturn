<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use App\Mail\UserStored;
use App\Mail\ApproveMail;
use App\Mail\RejectedMail;
use Illuminate\Http\Request;
use App\Models\ApplyCompetation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ApplyCompetationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::user()->role == 1) {
            return view("dashboard", [
                "allUsers" => User::where("role", 2)->count(),
                "allPendingUsers" => User::where("status", 1)->count(),
                "allApprovedUsers" => User::where("status", 2)->count(),
                "allRejectedUsers" => User::where("status", 3)->count(),
            ]);
        } else {
            return view("apply");
        }
    }

    public function userPayment()
    {
        if (Auth::user()->role == 1) {
            return view("dashboard", [
                "allUsers" => User::where("role", 2)->count(),
                "allPendingUsers" => User::where("status", 1)->count(),
                "allApprovedUsers" => User::where("status", 2)->count(),
                "allRejectedUsers" => User::where("status", 3)->count(),
            ]);
        } else {
            return view("make-payment");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "title" => "required",
            "papers_present_name" => "required",
            'do_you'=>"required"
        ]);

        if ($request->do_you == "Yes") {
            $request->validate([
                'file_upload' => 'required|file|mimes:jpg,png,pdf,doc,docx', // You can set the file types and size limit
                'title_presentation' => "required",
            ]);

        }

        $user = User::where("id", Auth::user()->id)->first();
        $apply = ApplyCompetation::create([
            "user_id" => Auth::user()->id,
            "title" => $request->title,
            "mobile_number" => $request->mobile_number,
            "papers_present_name" => $request->papers_present_name,
            "occupation" => $request->occupation,
            "title_presentation" => $request->title_presentation,
            "organization" => $request->organization,
            "nationality" => $request->nationality,
            "papers_present" => $request->file_upload != "" ? $request->file("file_upload")->store("uploads", "public") : Null,
        ]);
        if ($apply) {
            User::where("id", Auth::user()->id)->update([
                "status" => 1
            ]);
            Mail::to($user->email)->send(new UserStored($user));
            return redirect()->back()->with("success", "Your application submitted successful.");
        }
        return redirect()->back()->with("success", "Somthing Went wrong");
    }

    public function showAppliedUsers()
    {
        if (Auth::user()->role == 1) {
            $appliedusers = ApplyCompetation::with('user')->orderBy("id", "DESC")->get()->transform(fn($data) => [
                "id" => encrypt($data->id) ?? null,
                "user_id" => encrypt($data->user_id) ?? null,
                "name" => $data->user->name ?? null,
                "email" => $data->user->email ?? null,
                "mobile_number" => $data->mobile_number ?? null,
                "status" => $data->user->status,
                "title" => $data->title,
                "papers_present_name" => $data->papers_present_name,
                "occupation" => $data->occupation,
                "title_presentation" => $data->title_presentation ?? "no data",
                "organization" => $data->organization,
                "nationality" => $data->nationality,
                "papers_present" => $data->papers_present ?? "no data",
                "app_status" => $data->status,
                "date" => $data->created_at->format("M D, Y h:i A"),
            ]);
            return view("applieduser", ["appliedusers" => $appliedusers]);
        } else {
            return view("dashboard");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplyCompetation $applyCompetation)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplyCompetation $applyCompetation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApplyCompetation $applyCompetation)
    {
        //
        $request->validate([
            "status" => "required",
            "user_id" => "required",
        ]);

        $user = User::where("id", decrypt($request->user_id))->first();

        $userStatus = User::where("id", decrypt($request->user_id))->update([
            "status" => $request->status
        ]);
        if ($userStatus) {
            if ($request->status == 2) {
                Mail::to($user->email)->send(new ApproveMail($user));
            } else {
                Mail::to($user->email)->send(new RejectedMail($user));

            }
            return redirect()->back()->with("success", "Your status has been change successfull");
        }
        return redirect()->back()->with("success", "Something went wrong");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApplyCompetation $applyCompetation)
    {
        //
    }


    public function showAlldUsers()
    {
        if (Auth::user()->role == 1) {
            $appliedusers = User::where("role", 2)->orderBy("id", "DESC")->get()->transform(fn($data) => [
                "id" => encrypt($data->id) ?? null,
                "user_id" => encrypt($data->user_id) ?? null,
                "name" => $data->name ?? null,
                "email" => $data->email ?? null,
                "status" => $data->status,
                "date" => $data->created_at->format("M D, Y h:i A"),
            ]);
            return view("alluser", ["appliedusers" => $appliedusers]);
        } else {
            return view("dashboard");
        }
    }

    public function userPaymentPayment(Request $request)
    {
        $request->validate([
            'papers_present' => "required",
            'conference_amount' => "required",
            'file_upload' => "required",
        ]);
        $payment = Payment::where("user_id", Auth::user()->id)->count();

        if ($payment > 0) {
            return redirect()->back()->with("success", "Already paid");
        } else {
            Payment::create([
                'user_id' => Auth::user()->id,
                'papers_present' => $request->papers_present,
                'conference_amount' => $request->conference_amount,
                'file_upload' => $request->file_upload != "" ? $request->file("file_upload")->store("uploads", "public") : Null,
                'payment_comment' => $request->payment_comment,
            ]);
            return redirect()->back()->with("success", "Congratulation your reciept has been submitted successful");
        }

    }
}
