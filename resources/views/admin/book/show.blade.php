<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path"/>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Book Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.books.index') }}">Books</a></li>
                            <li class="breadcrumb-item">{{$book->title}} Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            @if (session('success'))
                <x-admin.alert-success>
                    {{ session('success') }}
                </x-admin.alert-success>
            @endif
            <div class="row">
                <div class="col-12">
                    <x-admin.card :cardSolid="true">
                        <x-admin.card-body>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <img src="/images/{{$book->image}}" class="product-image" alt="Product Image">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="my-3">{{$book->title}}</h3>
                                    <hr>
                                    <h4>Author</h4>
                                    <div class="btn-group btn-group-toggle">
                                        @if (sizeof($book->author) == 0)
                                            <label for="" class="btn btn-default text-center">
                                                No Author
                                            </label>
                                        @endif
                                        @foreach ($book->author as $author)
                                            <label for="" class="btn btn-default text-center">
                                                {{ $author->name }}
                                            </label>
                                        @endforeach
                                    </div>

                                    <h4 class="mt-3">Publisher</h4>
                                    <div class="btn-group">
                                        <label for="" class="btn btn-default text-center">
                                            {{ $book->publisher->name }}
                                        </label>
                                    </div>

                                    <h4 class="mt-3">Category</h4>
                                    <div class="btn-group">
                                        @if (sizeof($book->category) == 0)
                                            <label for="" class="btn text-center">
                                                No Category
                                            </label>
                                        @endif
                                        @foreach ($book->category as $category)
                                            <label for="" class="btn btn-default text-center">
                                                {{ $category->name }}
                                            </label>
                                        @endforeach
                                    </div>

                                    <h4 class="mt-3">Price</h4>
                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                        {{number_format($book->price,0, ',', '.')}} VND
                                        </h2>
                                    </div>

                                    <h4 class="mt-3">Quantity</h4>
                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                            {{number_format($book->quantity,0, ',', '.')}}
                                        </h2>
                                    </div>

                                    <div class="mt-4">
                                        <form action="{{route('admin.books.destroy', $book->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('admin.books.edit', $book->id)}}" class="btn btn-warning btn-lg btn-flat">
                                                Update
                                            </a>

                                            <button onclick="window.history.back()" class="btn btn-primary btn-lg btn-flat">
                                                Back
                                            </button>

                                            <button type="submit" class="btn btn-danger btn-lg btn-flat" onclick="return confirm('You want to delete?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> {{$book->description}} </div>
                                </div>
                            </div>
                        </x-admin.card-body>
                        <x-admin.card-footer></x-admin.card-footer>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer></x-admin.footer>
    <x-admin.script>
        <script>
            $(document).ready(function() {
                $('.product-image-thumb').on('click', function () {
                    var $image_element = $(this).find('img')
                    $('.product-image').prop('src', $image_element.attr('src'))
                    $('.product-image-thumb.active').removeClass('active')
                    $(this).addClass('active')
                })
            })
        </script>
    </x-admin.script>
</x-admin.layout>
