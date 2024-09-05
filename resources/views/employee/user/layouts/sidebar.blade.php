<div class="col-md-3 newsfeed-left-side sticky-top shadow-sm" id="sidebar-wrapper">
    <div class="card newsfeed-user-card h-100">
        <ul class="list-group list-group-flush newsfeed-left-sidebar">
            <li class="list-group-item">
                <h6>Job Categories</h6>
            </li>
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center sd-active">
                <a href="{{route('posts.filter_category',$category->id)}}" class="sidebar-item">
                    <img
                        src="front/assets/images/icons/left-sidebar/Full-Stack.png" alt="newsfeed">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
