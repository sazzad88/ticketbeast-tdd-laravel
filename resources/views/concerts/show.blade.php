<h1>{{ $concert->title }}</h1>
<p>{{ $concert->subtitle }}</p>
<p>{{ $concert->date->format('F j, Y') }}</p>
<p>Door at {{ $concert->date->format('g:ia') }}</p>
<p>{{ number_format($concert->ticket_price / 100 , 2) }}</p>
<p>{{ $concert->venue }}</p>
<p>{{ $concert->address }}</p>
<p>{{ $concert->city }}</p>
<p>{{ $concert->state }}</p>
<p>{{ $concert->zip }}</p>
<p>{{ $concert->additional_info }}</p>
