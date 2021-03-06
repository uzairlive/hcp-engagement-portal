<div class="w-100">
    <div id="accordion">
        <div class="row mb-2">
            <div class="col-lg-3 col-sm-12 ml-auto position-relative">
                <div class="w-100 bg-lightgray border-radius25px">
                <input wire:model="search" type="text" class="bg-transparent border-0 fontsize14px pl-3 pt-2 pb-2 outline-none w-100 pr-4" placeholder="Search Faq"/>
                <i class="fas fa-search fa-sm position-absolute serch-icon text-orange"></i>
                </div>
            </div>
        </div>
        <div class="w-100 d-flex flex-wrap">

            @if($faqs->isEmpty())
                <br>
                <div class="text-gray-700 text-sm">
                    No matching result was found.
                </div>
            @else
                <div class="card text-left border-0 w-100">
                    @foreach ($faqs as $key => $faq)
                        <div class="card-header bg-transparent pl-2 pr-2">
                        <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="false">
                                {{$faq->question}}
                            </a>
                            @if (auth()->user()->role == "admin")
                                <div class="float-right col-auto p-0 ">
                                    <a class="viewBtn text-black fontsize14px " data-id="{{$faq->id}}" data-toggle="modal" data-target="#editfaq"><i class="fa fa-pencil"></i></a>
                                    <button class="text-black fontsize14px bg-transparent border-0 ml-1 delete" data-id="{{$faq->id}}" ><i class="fa fa-trash"></i></button> 
                                </div>
                            @endif
                        </div>
                        <div id="collapse{{$key}}" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body font-gothamlight">
                                {{$faq->answer}}
                            </div>
                        </div>
                        
                    @endforeach
                </div>      
            @endif
            {{-- @endif --}}
            
        </div>            
        {{-- <div class="col-12">
            {{$faqs->links()}}
        </div> --}}
    </div>
</div>


