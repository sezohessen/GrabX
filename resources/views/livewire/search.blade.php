<div>
    {{-- Search input --}}
    <input wire:model="search" type="search" class="form-control form-control" placeholder="@lang('Search')"
    aria-label="Search">

    @if(strlen($search) >= 1)
    <div class="search-result">
        @if(sizeof($searchResult) > 0)
        <ul>
            @foreach ($searchResult as $result)
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('tenant.Product',['id' => $result->id]) }}">
                                <img class="img-thumbnail" src="{{ find_image($result->image ,  App\Models\Product::base ) }}" alt="Product-image-search">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="item-search-name" href="{{ route('tenant.Product',['id' => $result->id]) }}">  {{ LangDetail($result->name, $result->name_ar) }} </a>
                        </div>
                   </div>
                </div>
            </li>
            @endforeach
        </ul>
        @else
            <div class="px-3 py-3"> @lang('There is no results for') "<span style="font: bold">{{ $search }}</span>" </div>
        @endif
    </div>
    @endif
</div>

