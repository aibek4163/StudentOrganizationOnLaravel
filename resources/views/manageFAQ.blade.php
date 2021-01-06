@extends('adminMaster')

@section('admin_content')
   <!-- Modal -->
   <div class="modal fade" id="addItemsModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form th:action="addFAQ" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Adding FAQ</h5>
                        </div>

                        <div class="modal-body -xs">
                            <div class="form-group">
                                <label >Question</label>
                                <input type="text" class="form-control" name="question">
                            </div>
                            <div class="form-group">
                                <label >Answer</label>
                                <input type="text" class="form-control" name="answer">
                            </div>

        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" >
                                Cancel
                            </button>
                            <button class="btn btn-success mt-2 ml-3"  >Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <div class="row ">
            <div class="col-12 ">

                <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                        data-target="#addItemsModal" >Add FAQ
                </button>
                <br>
                <br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th >Question</th>
                        <th >Answer</th>
                        <th >Edit</th>
                        <th >Delete</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($faqs as $f)
                        <tr>

                            <td >{{$f->id}}</td>
                            <td >{{$f->question}}</td>
                            <td >{{$f->answer}}</td>

                            <td>
                                <button type="button" class="btn-sm btn-success " data-toggle="modal" data-target="#editItemModal{{$f->id}}" th:attrappend="data-target=${br.getId()}" >
                                Edit
                                </button>
                            </td>

                            <td>
                                <button type="button" class="btn-sm btn-danger" data-toggle="modal" attrappend="{{$f->id}}" data-target="#deleteFAQModal{{$f->id}}">
                                Delete
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="deleteFAQModal{{$f->id}}" tabindex="-1" attrappend="{{$f->id}}" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        
                            <div class="modal-dialog">
                                <form action="delete/{{$f->id}}" method="POST">
                                    @csrf
                                    <input type="text" name="id" value="{{$f->id}}">
                                    <div class="modal-content"> 
                                        <div class="modal-header"> 
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" >
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button  class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="modal fade" id="editItemModal{{$f->id}}" th:attrappend="id=${br.getId()}" tabindex="-1" role="dialog"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="edit/{{$f->id}}" method="POST">
                                @csrf
                                    <input type="text" name="id" value="{{$f->id}}">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label >Question</label>
                                                <input type="text" class="form-control" name="question"value="{{$f->question}}">
                                            </div>
                                            <div class="form-group">
                                                <label >Answer</label>
                                                <input type="text" class="form-control" name="answer"value="{{$f->answer}}">
                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                Cancel
                                                </button>
                                                <button  class="btn btn-success">Edit</button>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>




                    @endforeach


                   
                    </tbody>   
                </table>    
            </div>

        </div>





@endsection