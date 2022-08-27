@component('mail::message')
# Job Declined

The job you submitted has been declined.

@component('mail::button', ['url' => 'http://localhost:8000'])
View Job
@endcomponent

Thanks,<br>
LyonnAgency
@endcomponent
