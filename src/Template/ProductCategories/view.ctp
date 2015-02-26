<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product Category'), ['action' => 'edit', $productCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Category'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="productCategories view large-10 medium-9 columns">
    <h2><?= h($productCategory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $productCategory->has('product') ? $this->Html->link($productCategory->product->name, ['controller' => 'Products', 'action' => 'view', $productCategory->product->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $productCategory->has('category') ? $this->Html->link($productCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $productCategory->category->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($productCategory->id) ?></p>
        </div>
    </div>
</div>
