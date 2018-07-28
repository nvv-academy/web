{extends file="layout.tpl"}

{block name=body}
    <div class="col-sm-4">
        <ul class="nav nav-pills nav-stacked">
            <li
                    {if !isset($smarty.get.category)} class="active"{/if}
                    role="presentation"><a href="/?action=main">All</a></li>
            {foreach $categories as $category}
                <li
                        {if (isset($smarty.get.category) && ($smarty.get.category == $category['id']))}
                            class="active"
                        {/if}
                        role="presentation"><a href="/?action=main&category={$category['id']}">{$category['name']}</a></li>
            {/foreach}
        </ul>
    </div>
    <div class="col-sm-8">
        <table class="table table-bordered table-stripped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Add to cart</th>
            </thead>
            <tbody>
            {foreach $items as $item}
                <tr>
                    <td>{$item['id']}</td>
                    <td>{$item['name']}</td>
                    <td>{$item['price']}$</td>
                    <td>{$item['category']}</td>
                    <td><a href="/?action=addCart&id={$item['id']}" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add to cart</td>
                </tr>
            {/foreach}

            </tbody>
        </table>
    </div>
{/block}















