<script setup>
// import Layout from './Layout'
import { Head } from "@inertiajs/vue3";
import { Button } from "@/components/ui/button";
import { AppLayout } from "@/Layout";

// defineProps({ user: Object })
</script>

<template>
  <AppLayout>
    <template #title>Home</template>

    <div
      class="flex flex-1 items-center justify-center rounded-lg border border-dashed shadow-sm"
    >
      <div class="flex flex-col items-center gap-1 text-center">
        <Head title="Welcome" />
        <h1 class="text-blue-500 text-center p-7">Welcome</h1>
        <Button class="mt-4"> Add Product </Button>
      </div>
    </div>
    <!-- <p>Hello {{ user.name }}, welcome to your first Inertia app!</p> -->
  </AppLayout>
</template>