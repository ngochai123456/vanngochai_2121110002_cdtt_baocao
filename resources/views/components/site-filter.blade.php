<div class="filter-price">
    <form action="" method="get">
        @csrf
    
    <div class="group ">
        
     </div>
    </form>
</div>
<div class="filter-category">
    <p>Danh Mục Sản Phẩm</p>
    <ul>
        @foreach ($list_category as $item)
        <li>
            <a href="{{ route('slug.index',['slug'=>$item->slug]) }}">
                <i class="fa-solid  {{ ($item->slug==$slugselect) ?'fa-folder-open fa-beat-fade':'fa-folder' }}  p-1" >
                </i>
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
<div class="filter-brand">
    <p>Thương Hiệu</p>
    <ul>
        @foreach ($list_brand as $item)
        <li>
            <a href="{{ route('slug.index',['slug'=>$item->slug]) }}">
                <i class="fa-solid  {{ ($item->slug==$slugselect) ?'fa-folder-open fa-beat-fade':'fa-folder' }}  p-1" >
                </i>
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>
</div>