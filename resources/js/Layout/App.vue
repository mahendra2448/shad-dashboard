<script setup>
import { SearchBar } from "@/components/ui/search-bar";
import { UserMenu } from "@/Layout/UserMenu";
import { DarkMode } from "@/Layout/DarkMode";
import { Sidebar, SidebarMobile } from "@/Layout/Sidebar";

</script>

<template>
  <div
    class="grid min-h-screen w-full md:grid-cols-[220px_1fr] lg:grid-cols-[280px_1fr]"
  >
    <Sidebar />
    <div class="flex flex-col">
      <header
        class="flex h-14 items-center gap-4 border-b bg-muted/40 px-4 lg:h-[60px] lg:px-6"
      >
        <SidebarMobile />
        <SearchBar />
        <DarkMode />
        <UserMenu />
      </header>

      <main class="flex flex-1 flex-col gap-4 p-4 lg:gap-6 lg:p-6">
        <div class="flex items-center">
          <h1 class="text-lg font-semibold md:text-2xl">
            <slot name="title"></slot>
          </h1>
        </div>

        <!-- Content Goes Here -->
        <slot />
        <!-- Content Goes Here -->
      </main>
    </div>
  </div>
</template>