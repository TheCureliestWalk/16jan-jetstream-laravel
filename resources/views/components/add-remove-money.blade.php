<div class="col-xl col-md mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Add/Remove Money</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Test button to remove or add money</div>
                    <div class="d-flex flex-md-row-reverse">
                        <form method="POST" action="{{ route('addMoney') }}">
                            @csrf
                            <label for="">Add: </label>
                            <input type="text" name="addMoneyValue" id="addMoneyValue" class="my-3">
                            <button class="btn btn-warning mx-2 " >Add Money</button>
                        </form>

                        <form method="POST" action="{{ route('removeMoney') }}">
                            @csrf
                            <label for="">Remove: </label>
                            <input type="text" name="removeMoneyValue" id="removeMoneyValue" class="my-3">
                            <button class="btn btn-danger mx-2 ">Remove Money</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
