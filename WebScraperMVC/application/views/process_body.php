<h3>Scrape Information</h3>
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
            <td>Website Url</td>
            <td><a>something</a></td>
        </tr>
        </tbody>
    </table>
</div>

<form method="post" action="process/action">
    <h3>Event</h3>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <div class="form-group">
        <label for="subcategory">Subcategory</label>
        <input type="text" class="form-control" id="subcategory" name="subcategory">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" rows="10" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="text" class="form-control" id="picture" name="picture">
    </div>
    <div class="form-group">
        <label for="videoUrl">Video Url</label>
        <input type="text" class="form-control" id="videoUrl" name="videoUrl">
    </div>
    <h3>Schedule</h3>
    <div class="form-group">
        <label for="startDate">Start Date</label>
        <input type="text" class="form-control" id="startDate" name="startDate">
    </div>
    <div class="form-group">
        <label for="endDate">End Date</label>
        <input type="text" class="form-control" id="endDate" name="endDate">
    </div>
    <div class="form-group">
        <label for="startTime">Start Time</label>
        <input type="text" class="form-control" id="startTime" name="startTime">
    </div>
    <h3>Location</h3>
    <div class="form-group">
        <label for="username">Address</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="text">City</label>
        <input type="text" class="form-control" id="text" name="text">
    </div>
    <div class="form-group">
        <label for="username">Province</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="text">Postal Code</label>
        <input type="text" class="form-control" id="text" name="text">
    </div>
    <h3>Ticket</h3>
    <div class="form-group">
        <label for="ticketUrl">Ticket Url</label>
        <input type="text" class="form-control" id="ticketUrl" name="ticketUrl">
    </div>
    <div class="form-group">
        <label for="ticketPrice">Ticket Price</label>
        <input type="text" class="form-control" id="ticketPrice" name="ticketPrice">
    </div>
    <h3>Additional Information</h3>
    <div class="form-group">
        <label for="sponsor">Sponsor</label>
        <input type="text" class="form-control" id="sponsor" name="sponsor">
    </div>
    <div class="form-group">
        <label for="ageRestriction">Age Restriction</label>
        <input type="text" class="form-control" id="ageRestriction" name="ageRestriction">
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" id="complete" name="complete">This Event is Complete
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
