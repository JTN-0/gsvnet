<?php
    $presenter = new App\Helpers\Core\PaginationPresenter($paginator);
?>

@if ($paginator->getLastPage() > 1)
    <ul class="pagination">
        {!! $presenter->render() !!}
    </ul>
@endif