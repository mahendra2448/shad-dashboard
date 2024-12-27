<script setup>
import { Badge } from "@/components/ui/badge";

import { Button } from "@/components/ui/button";
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import {
  Bell,
  CircleUser,
  Home,
  LineChart,
  Menu,
  Package,
  Package2,
  ShoppingCart,
  Users,
} from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import { route } from 'ziggy-js';
import { Ziggy } from '../../ziggy';

const dashURL = route('dash.index', undefined, undefined, Ziggy);
const userURL = route('user.index', undefined, undefined, Ziggy);
</script>

<template>
  <div class="hidden border-r bg-muted/40 md:block">
    <div class="flex h-full max-h-screen flex-col gap-2">
      <div class="flex h-14 items-center border-b px-4 lg:h-[60px] lg:px-6">
        <Link href="/" class="flex items-center gap-2 font-semibold">
          <Package2 class="h-6 w-6" />
          <span class="">Shad Dashboard</span>
        </Link>
        <Button variant="outline" size="icon" class="ml-auto h-8 w-8">
          <Bell class="h-4 w-4" />
          <span class="sr-only">Toggle notifications</span>
        </Button>
      </div>
      <div class="flex-1">
        <nav class="grid items-start px-2 text-sm font-medium lg:px-4">
          <Link
            :href="dashURL"
            :class="
              $page.url === '/dashboard'
                ? 'text-muted-foreground'
                : ''
            "
            class="flex items-center gap-3 rounded-lg px-3 py-2 transition-all hover:text-primary"
          >
            <Home class="h-4 w-4" />
            Dashboard
          </Link>
          <Link
            href="#"
            class="flex items-center gap-3 rounded-lg px-3 py-2 transition-all hover:text-primary"
          >
            <ShoppingCart class="h-4 w-4" />
            Orders
            <Badge
              class="ml-auto flex h-6 w-6 shrink-0 items-center justify-center rounded-full"
            >
              6
            </Badge>
          </Link>
          <Link
            href="#"
            class="flex items-center gap-3 rounded-lg px-3 py-2 text-primary transition-all hover:text-primary"
          >
            <Package class="h-4 w-4" />
            Products
          </Link>
          <Link
            :href="userURL"
            :class="
              $page.url === '/users'
                ? 'text-muted-foreground'
                : ''
            "
            class="flex items-center gap-3 rounded-lg px-3 py-2 transition-all hover:text-primary"
          >
            <Users class="h-4 w-4" />
            Users
          </Link>
        </nav>
      </div>

      <!-- Foot Notes -->
      <!-- <div class="mt-auto p-4">
        <Card>
          <CardHeader class="p-2 pt-0 md:p-4">
            <CardTitle>Foot notes</CardTitle>
            <CardDescription>
              Unlock all features and get unlimited access to our support team.
            </CardDescription>
          </CardHeader>
          <CardContent class="p-2 pt-0 md:p-4 md:pt-0">
            <Button size="sm" class="w-full"> Upgrade </Button>
          </CardContent>
        </Card>
      </div> -->
    </div>
  </div>
</template>