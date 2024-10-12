@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400 alert-success']) }}>
        <i class="fa fa-check-circle"></i>&nbsp;{{ $status }}
    </div>
@endif
