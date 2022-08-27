@component('mail::message')
# Job Approved

Your job  has been approved.

@component('mail::button', ['url' => 'http://localhost:8000'])
View Job
@endcomponent

Thanks,<br>
LyonnAgency
@endcomponent
