@component('mail::message')
# Introduction

coderInProgress.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
