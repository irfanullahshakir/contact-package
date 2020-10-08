@component('mail::message')
# Introduction

There is a new query form {{ $name }}

Message:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
