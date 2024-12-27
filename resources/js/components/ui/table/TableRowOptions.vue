<script setup>
import { Button } from "@/components/ui/button";
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import { Icon } from "@iconify/vue";
import { MoreHorizontal } from "lucide-vue-next";

defineProps({
  rowData: Object,
});

function copy(d) {
  navigator.clipboard.writeText(d);
}
</script>

<template>
  <DropdownMenu>
    <DropdownMenuTrigger as-child>
      <Button variant="ghost" class="w-8 h-8 p-0">
        <span class="sr-only">Open menu</span>
        <MoreHorizontal class="w-4 h-4" />
      </Button>
    </DropdownMenuTrigger>
    <DropdownMenuContent align="end">
      <DropdownMenuLabel>Actions</DropdownMenuLabel>
      <DropdownMenuItem @click="copy(rowData.email)"><Icon icon="radix-icons:clipboard" /> Copy Email</DropdownMenuItem>
      <DropdownMenuItem><Icon icon="radix-icons:eye-open" />View</DropdownMenuItem>
      <DropdownMenuItem><Icon icon="radix-icons:pencil-1" />Edit</DropdownMenuItem>
      <DropdownMenuSeparator />
      <DropdownMenuItem class="text-red-500"><Icon icon="radix-icons:trash" />Delete</DropdownMenuItem>
    </DropdownMenuContent>
  </DropdownMenu>
</template>