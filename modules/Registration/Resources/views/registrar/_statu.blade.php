<li>
    {{-- <img src="images/img.jpg" class="avatar" alt="Avatar"> --}}
    <div class="message_date">
        <h3 class="date text-info"><i class="fa fa-calendar"></i> {{ $history->created_at->format('d/m/Y') }}</h3>
        <p class="month"><i class="fa fa-clock-o"></i> {{ $history->created_at->format('H:i:s') }}</p>
    </div>
    <div class="message_wrapper">
        <h4 class="heading">
        {{ $history->step->name }}
        </h4>
    <blockquote class="message">{{ $history->comment }}</blockquote>
    <br />
    <p class="url">
        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
        <i class="fa fa-user"></i> 
        @if($history->creator)
        بواسطة : {{ $history->creator->name }}
        @else
        بواسطتك أنت
        @endif
    </p>
</div>
</li>