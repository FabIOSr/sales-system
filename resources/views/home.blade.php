@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h4 class="text-start">Component | List</h4>
                        </div>
                        <div class="col-sm-12 col-md-6 text-end">
                            <span class="text-end">
                                <a href="javascript:void()" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal" style="width:5rem;">Novo</a>
                            </span>
                        </div>
                        <div class="col-md-12 mt-2">
                            <input type="search" name="search" id="search" placeholder="Search..." class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-stripped mt-2">
                                <thead class="table-dark">
                                  <tr>
                                    <th scope="col">DESCRIPTION</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col" class="text-end">ACTIONS</th>
                                  </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                  <tr>
                                    <th scope="row">Category Name</th>
                                    <td class="text-center">
                                        <span><img src="" alt="imagem de exemplo" width="80" height="70" class="rounded"></span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-dark">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Remove</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Category Name</th>
                                    <td class="text-center">
                                        <span><img src="" alt="imagem de exemplo" width="80" height="70" class="rounded"></span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-dark">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Remove</a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Category Name</th>
                                    <td class="text-center">
                                        <span><img src="" alt="imagem de exemplo" width="80" height="70" class="rounded"></span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-dark">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Remove</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                              pagination
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    include formulario
</div>

<script>
    document.addEventListener('load', ()=>{
        
    })
</script>
@endsection
