<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div style=" padding: 6px; margin-top: 8px; border-bottom: 1px solid #f1f1f1; color:#30a5ff; font-weight:600; font-size:20px; text-align:center">
        Admin
    </div>
    <ul class="nav menu">
        <li class="@if ($_REQUEST['url']=='dashboard')
        active
    @endif">
            <a href="{{BASE_URL.'dashboard'}}">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='category' || $_REQUEST['url']=='add-cate' || $_REQUEST['url']=='edit-cate')
            active
        @endif">
            <a href="{{BASE_URL.'category'}}">
                <svg class="glyph stroked open folder">
                    <use xlink:href="#stroked-open-folder" />
                </svg>
                Quản lý thể loại
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='product' || $_REQUEST['url']=='add-product' || 
        $_REQUEST['url']=='edit-product')
            active
        @endif">
            <a href="{{BASE_URL.'product'}}">
                <svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg>
                Quản lý sách
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='user' || $_REQUEST['url']=='add-user' || $_REQUEST['url']=='edit-user')
            active
        @endif">
            <a href="{{BASE_URL.'user'}}">
                <svg class="glyph stroked male user ">
                    <use xlink:href="#stroked-male-user" />
                </svg>
                Quản lý tài khoản
            </a>
        </li>
    </ul>
</div>

