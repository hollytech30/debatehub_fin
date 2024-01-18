<div>
    
    <x-slot name="header">
        <div class="pagetitle">
            <h1>{{ __('Frequently Asked Questions')}} </h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">FAQs</li>
            </ol>
            </nav>
        </div>
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <div class="row">
                    <div class="col">FAQs</div>
                    <div class="col justify-content-left">
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" placeholder="Search FAQs" title="Enter search keyword" wire:model.live.debounce.300ms="search">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End Search Bar -->
                    </div>
                </div>
            </div>
           
            <h5 class="card-title">To attain knowledge, add things every day; To attain wisdom, subtract things every day.</h5>
            {{-- <p>To attain knowledge, add things every day; To attain wisdom, subtract things every day.</p> --}}
            <div class="accordion accordion-flush" id="faqsAccordion">
                @forelse ($faqs as $index => $faq)
                    <div  wire:key="{{ $faq->id }}" class="accordion-item">
                        <h2 class="accordion-header" id="heading{{$faq->id}}">
                            <button class="accordion-button @if($index !== 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                <strong>{{$faq->question}}</strong>
                            </button>
                        </h2>
                        <div id="collapse{{$faq->id}}" class="accordion-collapse collapse @if($index === 0) show @endif" aria-labelledby="heading{{$faq->id}}" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body">
                                {{$faq->answer}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No FAQs Available</p>
                @endforelse
            </div>  
            <div class="card-footer">
                {{$faqs->links()}}
            </div>          
        </div>
    </div>
</div>
