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
                        <h1>Create a book</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.books.index') }}">Books</a></li>
                            <li class="breadcrumb-item">Create a book</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
            @if ($errors->any())
                <x-admin.alert-danger>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-admin.alert-danger>
            @endif
            <div class="row">
                <div class="col-12">
                    <x-admin.card>
                        <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.card-header>
                                <h3 class="card-title">Form Add A New Book</h3>
                            </x-admin.card-header>
                            <x-admin.card-body>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">ISBN code of Book</label>
                                            <input type="text" name="isbn_code" value="{{ old('isbn_code') }}" id="" class="form-control" placeholder="Enter ISBN code of Book" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Title of Book</label>
                                            <input type="text" name="title" value="{{ old('title') }}" id="" class="form-control" placeholder="Enter Title of Book" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <div class="nav justify-content-center">
                                                <img src="" style="max-width: 200px;" class="" id="img" alt="image of book">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image of book</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" accept="image/*" onchange="img.src = window.URL.createObjectURL(this.files[0])" required>
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
                                                <input type="number" name="quantity" value="{{ old('quantity') }}" id="quantity" min="0" step="1" oninput="this.value = Math.round(this.value);" class="form-control" placeholder="Enter quantity of Book" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Price of book</label>
                                            <div class="input-group">
                                                <input type="number" name="price" value="{{ old('price') }}" oninput="this.value = Math.round(this.value);" min="0" id="price" class="form-control" placeholder="Enter price of Book" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">VND</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="5" name="description" required>{{ old('description') }}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="select2bs4" multiple data-placeholder="Select one or more categories" name="categories[]" style="width: 100%;" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if (old('categories'))
                                                            @foreach (old('categories') as $old_category)
                                                                @if ($old_category == $category->id)
                                                                    {{ 'selected' }}
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        @endif                                                        
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
                                                        @if (old('authors'))
                                                            @foreach (old('authors') as $old_author)
                                                                @if ($old_author == $author->id)
                                                                    {{ 'selected' }}
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        @endif
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
                                                    <option value="{{ $publisher->id }}" {{ $publisher->id == old('publisher_id') ? 'seleted' : '' }}>{{ $publisher->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </x-admin.card-body>
                            <x-admin.card-footer>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="{{ route('admin.books.index')}}" class="btn btn-danger">Cancel</a>
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
                bsCustomFileInput.init();
            })
        </script>
    </x-admin.script>
</x-admin.layout>