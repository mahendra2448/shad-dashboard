<script setup>
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import { Button } from "@/components/ui/button";
import { CircleUser } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import { Icon } from "@iconify/vue";
import { route } from 'ziggy-js';
import { Ziggy } from '../../ziggy';

const signOut = route('auth.sign-out', undefined, undefined, Ziggy);
</script>

<template>
  <DropdownMenu>
    <DropdownMenuTrigger as-child>
      <Button variant="secondary" size="icon" class="rounded-full">
        <CircleUser class="h-5 w-5" />
        <span class="sr-only">Toggle user menu</span>
      </Button>
    </DropdownMenuTrigger>
    <DropdownMenuContent align="end">
      <DropdownMenuLabel>My Account</DropdownMenuLabel>
      <DropdownMenuSeparator />

      <DropdownMenuItem><Link href="#">Settings</Link></DropdownMenuItem>
      <DropdownMenuItem><Link href="#">Support</Link></DropdownMenuItem>
      <DropdownMenuSeparator />
      <DropdownMenuItem><Icon icon="radix-icons:exit" /><Link :href="signOut">Logout</Link></DropdownMenuItem>
    </DropdownMenuContent>
  </DropdownMenu>
</template>