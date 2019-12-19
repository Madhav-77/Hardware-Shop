@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Add Product
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead align="center" class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody align="center">
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    |
                                    <a id="delete" href="#"><i style="color:crimson" class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
