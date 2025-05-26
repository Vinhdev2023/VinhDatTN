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
                            <li class="breadcrumb-item">Create a book</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <x-admin.main-content>
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
                                            <input type="text" name="" id="" class="form-control" placeholder="Enter ISBN code of Book">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Title of Book</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="Enter Title of Book">
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
                                                    <input type="file" name="Image" class="custom-file-input" id="exampleInputFile" accept="image/*" onchange="img.src = window.URL.createObjectURL(this.files[0])">
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
                                            <label for="">Price of book</label>
                                            <div class="input-group">
                                                <input type="number" name="" oninput="this.value = Math.round(this.value);" id="price" class="form-control" placeholder="Enter price of Book">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">VND</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Quantity of book</label>
                                            <div class="input-group">
                                                <input type="number" name="" id="quantity" min="0" step="1" oninput="this.value = Math.round(this.value);" class="form-control" placeholder="Enter quantity of Book">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="5" name=""></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Multiple</label>
                                            <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                                    style="width: 100%;">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Multiple</label>
                                            <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                                    style="width: 100%;">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Minimal</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
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
            })
        </script>
    </x-admin.script>
</x-admin.layout>