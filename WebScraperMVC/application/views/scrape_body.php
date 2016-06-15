<div class = "table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Time Since Last Scraped</td>
                <td>10 hours</td>
            </tr>
            <tr>
                <td>Estimated Full Site Scrape Time</td>
                <td>20 minutes</td>
            </tr>
            <tr>
                <td>Website Url</td>
                <td>http://www.brownpapertickets.com/browse.html?&page=1</td>
            </tr>
        </tbody>
    </table>
</div>

<h3>Url</h3>
<div class = "table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Example</b></td>
                <td>http://www.vancouversymphony.ca/calendar/2016/5/</td>
            </tr>
            <tr>
                <td><b>Front Url</b></td>
                <td>http://www.vancouversymphony.ca/calendar/</td>
            </tr>
            <tr>
                <td><b>Value 1</b></td>
                <td>2016</td>
            </tr>
            <tr>
                <td><b>Mid Url</b></td>
                <td>/</td>
            </tr>
            <tr>
                <td><b>Value 2</b></td>
                <td>5</td>
            </tr>
            <tr>
                <td><b>Back Url</b></td>
                <td>/</td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" action="process/action">
    <div class="form-group">
        <label for="frontUrl">Front Url</label>
        <input type="text" class="form-control" id="frontUrl" name="frontUrl" required>
    </div>
    <div class="form-group">
        <label for="valueOne">Value 1</label>
        <input type="text" class="form-control" id="valueOne" name="valueOne">
    </div>
    <div class="form-group">
        <label for="midUrl">Mid Url</label>
        <input type="text" class="form-control" id="midUrl" name="midUrl">
    </div>
    <div class="form-group">
        <label for="valueTwo">Value 2</label>
        <input type="text" class="form-control" id="valueTwo" name="valueTwo">
    </div>
    <div class="form-group">
        <label for="backUrl">Back Url</label>
        <input type="text" class="form-control" id="backUrl" name="backUrl">
    </div>
    <div class="form-group">
        <label for="valueOneEnd">Value 1 End</label>
        <input type="text" class="form-control" id="valueOneEnd" name="valueOneEnd">
    </div>
    <div class="form-group">
        <label for="valueTwoEnd">Value 2 End</label>
        <input type="text" class="form-control" id="valueTwoEnd" name="valueTwoEnd">
    </div>

    <button type="submit" class="btn btn-default">Scrape</button>
</form>
