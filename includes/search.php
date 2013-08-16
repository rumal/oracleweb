
<div class="align-center">
    <form class="form-search" action="ask.php" data-bind="submit: ask">
        <div class="input-prepend input-append">
            <span class="add-on">oracle</span>
            <input type="text" name="q" class="input-xxlarge" autocomplete="off" data-bind="value: query, valueUpdate : 'keyup'" placeholder="Type your search query">
        </div>
        <button type="submit" class="btn btn-large btn-primary" data-bind="enable: query">Ask</button>
    </form>
</div>