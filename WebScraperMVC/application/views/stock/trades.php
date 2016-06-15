<!--<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

        <!-- figure out how to load recent stock traded name here
        Stocks
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        {stock_list}
        <li><a href="stock/GetStock/{Code}">{Code}</a></li>
        {/stock_list}
    </ul>
</div>-->

<div id="trading" class="tab-pane fade in active">
    <div class = "row">
        <div class = "col-md-5">
            <h2>Stocks</h2>
            <div class = "table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Value</th>
                    </tr>
                    </thead>
                    <tbody>

                    {transactions_list}
                    <tr>
                        <td>{code}</td>
                        <td>{name}</td>
                        <td>{category}</td>
                        <td>{value}</td>
                    </tr>
                    {/transactions_list}
                    </tbody>
                </table>
            </div>
        </div>