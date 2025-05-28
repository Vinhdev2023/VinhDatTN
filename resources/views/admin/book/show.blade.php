<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader></x-admin.preloader>
    <x-admin.navbar></x-admin.navbar>
    <x-admin.main-sidebar-container :path="$path"></x-admin.main-sidebar-container>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create a book</h1>
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
                                        @foreach ($book->author as $author)
                                            @if ($author == null)
                                                <label for="" class="btn text-center">
                                                    No Author
                                                </label>
                                                @break
                                            @endif
                                            <label for="" class="btn text-center">
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
                                        @foreach ($book->category as $category)
                                            @if ($category == null)
                                                <label for="" class="btn text-center">
                                                    No Category
                                                </label>
                                                @break
                                            @endif
                                            <label for="" class="btn btn-default text-center">
                                                {{ $category->name }}
                                            </label>
                                        @endforeach
                                    </div>

                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                        {{number_format($book->price,0, ',', '.')}} VND
                                        </h2>
                                    </div>

                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                        There are {{number_format($book->quantity,0, ',', '.')}} of these books in stock.
                                        </h2>
                                    </div>

                                    <div class="mt-4">
                                        <div class="btn btn-warning btn-lg btn-flat">
                                            Update
                                        </div>

                                        <div class="btn btn-danger btn-lg btn-flat">
                                            Delete
                                        </div>
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