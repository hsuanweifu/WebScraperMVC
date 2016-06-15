<div id="history" class="tab-pane fade in active">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Pick Player
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            {players_list}
            <li><a href="portfolio/getPlayer/{Player}">{Player}</a></li>
            {/players_list}
        </ul>
    </div>
    <div class = "row">
        <div class = "col-md-5">
            <h2>Recent Activity</h2>
            <div class = "table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Player</th>
                        <th>Stock</th>
                        <th>Transaction</th>
                        <th>Quantity</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--{stock_list}
                    <tr>
                        <td><a href="/stock/{Code}">{Code}</a></td>
                        <td>{Name}</td>
                        <td>{Category}</td>
                        <td>{Value}</td>
                    </tr>
                    {/stock_list}-->
                    {transactions_list}
                    <tr>
                        <td>{Player}</td>
                        <td>{Stock}</td>
                        <td>{Trans}</td>
                        <td>{Quantity}</td>
                        <td>{DateTime}</td>
                    </tr>
                    {/transactions_list}
                    </tbody>
                </table>
            </div>
        </div>
        <div class = "col-md-5 col-md-offset-1">
            <h2>Current Holdings</h2>
            <div class = "table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Stock</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--{stock_list}
                    <tr>
                        <td><a href="/stock/{Code}">{Code}</a></td>
                        <td>{Name}</td>
                        <td>{Category}</td>
                        <td>{Value}</td>
                    </tr>
                    {/stock_list}-->
                    {transactions_list}
                    <tr>
                        <td>{Stock}</td>
                        <td>{Quantity}</td>
                    </tr>
                    {/transactions_list}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>