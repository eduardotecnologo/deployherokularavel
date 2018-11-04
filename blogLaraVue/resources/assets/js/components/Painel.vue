<template>
    <div class="panel panel-primary">
        <div class="panel-heading">{{ titulo }}</div>

            <div class="panel-body">
                <slot></slot>
            </div>
        </div>
</template>

<script>
export default {
  props: ["titulo", "cor"]
};
</script>
