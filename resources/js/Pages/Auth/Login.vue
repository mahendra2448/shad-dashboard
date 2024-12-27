<script setup>
import { Button } from "@/components/ui/button";
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import { route } from 'ziggy-js';
import { Ziggy } from '../../ziggy';

const signUp = route('auth.register', undefined, undefined, Ziggy);

// Form
const form = useForm({
  email: "",
  password: "",
});

const errors = ref({});

const submit = () => {
  form.post("login", {
    onError: (error) => {
      errors.value = error;
    },
  });
};
</script>

<template>
  <div class="mx-auto h-screen w-screen flex items-center shadow-md">
    <Card class="mx-auto max-w-md p-5">
      <CardHeader>
        <CardTitle class="text-2xl"> Login to Shad Dashboard </CardTitle>
        <CardDescription>
          Enter your credentials.
        </CardDescription>
      </CardHeader>
      <CardContent>
        <form @submit.prevent="submit">
          <div class="grid gap-4">
            <div class="grid gap-2">
              <Label for="email">Email</Label>
              <Input id="email" type="email" placeholder="john@example.com" 
                v-model="form.email" :class="{ 'is-invalid': errors.email }" required autofocus />
            </div>
            <div class="grid gap-2">
              <div class="flex items-center">
                <Label for="password">Password</Label>
                <a href="#" class="ml-auto inline-block text-xs underline">
                  Forgot your password?
                </a>
              </div>
              <Input id="password" type="password" 
                v-model="form.password" :class="{ 'is-invalid': errors.password }" required />
              <span class="text-red-500 text-xs" v-if="errors.email">{{ errors.email }}</span>
            </div>
            <Button type="submit" class="w-full"> Login </Button>
            <!-- <Button variant="outline" class="w-full"> Login with Google </Button> -->
          </div>
        </form>
        
        <div class="mt-5 text-center text-xs">
          Don't have an account?
          <Link :href="signUp" class="underline"> Sign up </Link>
        </div>
      </CardContent>
    </Card>
  </div>
</template>