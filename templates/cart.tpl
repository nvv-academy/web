{extends file="layout.tpl"}



{block name=body}

    {if isset($smarty.get.message)}
        <div style="color: green">{$smarty.get.message}</div>
    {/if}
    <table class="table table-bordered table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>PRICE</th>
            <th>COUNT</th>
            <th>TOTAL</th>
        </thead>
        <tbody>
            {foreach $items as $item}
                <tr>
                    <td>{$item['id']}</td>
                    <td>{$item['name']}</td>
                    <td>{$item['category']}</td>
                    <td>{$item['price']}$</td>
                    <td><a href="/?action=inc">+</a> {$item['count']} <a href="/?action=dec">-</a></td>
                    <td>{$item['total']}$</td>
                </tr>
            {/foreach}
        </tbody>

    </table>

    <a href="/?action=createOrder" class="btn btn-success">Create Order</a>
{/block}