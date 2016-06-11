@extends('layouts.with-sidebar')

@section('hero')
    @include('shared.hero', [
                            'hero_image' => 'img/bg/users.jpg',
                            'hero_title' => 'All Users',
                            'hero_subtitle' => 'If you are not an admin, turn back now.'
                            ])
@stop

@section('content')
    <div id="users-panel" class="panel panel--default panel--first">
        <div class="panel__content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti inventore fugiat ipsa iusto. Atque deleniti debitis, totam sapiente voluptates corporis ut. Itaque cum sapiente, nobis odio atque, inventore earum corporis ullam possimus blanditiis nisi in tempora, facilis culpa nesciunt, voluptatum eveniet accusantium optio dolores! Reprehenderit, architecto ut eligendi? Reprehenderit, aperiam ipsum iusto quae itaque nam atque odio explicabo, provident eum ducimus voluptates. Saepe corporis, quod, harum doloribus in inventore at! Rem reiciendis sed molestias, ipsam eligendi! Laudantium nulla assumenda ullam debitis amet temporibus cupiditate error molestias tenetur, ea quidem, doloremque sequi ipsam. Explicabo saepe itaque nobis ab tempora iusto dicta deleniti voluptatibus fugit vero? Laboriosam sapiente fugiat, ratione odio sint illum voluptatem ducimus modi dolore sit rem eius nostrum neque architecto quod molestiae corporis maxime quos quis delectus, ut, cupiditate. Voluptate molestias vel dignissimos, laboriosam quis libero, optio adipisci quos similique distinctio nobis, dolore minus aliquam odit quas voluptates et! Officiis aspernatur sequi, ducimus quam repellendus incidunt facere provident aliquid, beatae odit maiores numquam dolore error amet. Non rerum sint distinctio debitis eveniet accusantium placeat, magni voluptatum perspiciatis vel, inventore nesciunt, cupiditate. Autem eaque, delectus sit tempore ad molestiae ab, saepe quos aut pariatur suscipit sint hic ullam ipsum nesciunt.
        </div>
    </div>
@stop