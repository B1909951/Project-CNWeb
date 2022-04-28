<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Thể loại</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach ($categories as $category)
            <?php
            if(count($category->products)>= 0 && $category->show_menu == 1){
            ?>
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{BASE_URL.'category-products&id='.$category->id}}#show">{{$category->cate_name}}</a></h4>
                </div>
            </div>
            <?php
            }
            ?> 
            @endforeach
        </div>
    </div>
</div>