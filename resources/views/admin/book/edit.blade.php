<x-admin.layout :page="'not-login-page'">
    <x-admin.preloader/>
    <x-admin.navbar/>
    <x-admin.main-sidebar-container :path="$path" :numbook="$num_book" :numcategory="$num_category" :numauthor="$num_author" :numpublisher="$num_publisher"/>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit a book</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.books.index') }}">Books</a></li>
                            <li class="breadcrumb-item">Edit a book</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <form action="{{ route('admin.books.update', $book->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <x-admin.card-header>
                                <h3 class="card-title">Form Edit A Book</h3>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">ISBN code of Book</label>
                                            <input type="text" name="isbn_code" value="{{ $book->isbn_code }}" id="" class="form-control" placeholder="Enter ISBN code of Book" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Title of Book</label>
                                            <input type="text" name="title" value="{{ $book->title }}" id="" class="form-control" placeholder="Enter Title of Book" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="nav justify-content-center">
                                                <img src="/images/{{ $book->image }}" style="max-width: 200px;" class="" id="img" alt="image of book">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image of book</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" accept="image/*" onchange="img.src = window.URL.createObjectURL(this.files[0])">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Quantity of book</label>
                                            <div class="input-group">
                                                <input type="number" name="quantity" value="{{ $book->quantity }}" id="quantity" min="0" step="1" oninput="this.value = Math.round(this.value);" class="form-control" placeholder="Enter quantity of Book" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Price of book</label>
                                            <div class="input-group">
                                                <input type="number" name="price" value="{{ $book->price }}" oninput="this.value = Math.round(this.value);" id="price" class="form-control" placeholder="Enter price of Book" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">VND</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="5" name="description" required>{{ $book->description }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="select2bs4" multiple data-placeholder="Select one or more categories" name="categories[]" style="width: 100%;" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                            @foreach ($book->category as $book_category)
                                                                @if ($book_category->id == $category->id)
                                                                    {{ 'selected' }}
                                                                    @break
                                                                @endif
                                                            @endforeach                                                        
                                                        >{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Authors</label>
                                            <select class="select2bs4" multiple data-placeholder="Select one or more authors" name="authors[]" style="width: 100%;" required>
                                                @foreach ($authors as $author)
                                                    <option value="{{ $author->id }}"
                                                            @foreach ($book->author as $book_author)
                                                                @if ($book_author->id == $author->id)
                                                                    {{ 'selected' }}
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        >{{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Publishers</label>
                                            <select class="form-control select2" style="width: 100%;" name="publisher_id" required>
                                                @foreach ($publishers as $publisher)
                                                    <option value="{{ $publisher->id }}" {{ $publisher->id == $book->publisher->id ? 'seleted' : '' }}>{{ $publisher->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.books.show', $book->id)}}" class="btn btn-danger">Cancel</a>
                            </x-admin.card-footer>
                        </form>
                    </x-admin.card>
                </div>
            </div>
        </x-admin.main-content>
    </div>
    <x-admin.footer></x-admin.footer>
    <x-admin.script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2()
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                })
            })
        </script>
    </x-admin.script>
</x-admin.layout>