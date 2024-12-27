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
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";
import { route } from 'ziggy-js';
import { Ziggy } from '../../ziggy';

const signIn = route('login', undefined, undefined, Ziggy);

// Form
const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const errors = ref({});

const submit = () => {
  form.post("signup", {
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
        <CardTitle class="text-xl"> Sign Up </CardTitle>
        <CardDescription>
          Enter your information to create an account
        </CardDescription>
      </CardHeader>
      <CardContent>
        <form @submit.prevent="submit">
          <div class="grid gap-4">
            <div class="grid gap-2">
              <Label for="name">Name</Label>
              <Input
                id="name"
                v-model="form.name"
                :class="{ 'is-invalid': errors.name }"
                placeholder="John"
                required
              />
            </div>
            <div class="grid gap-2">
              <Label for="email">Email</Label>
              <Input
                id="email"
                v-model="form.email"
                :class="{ 'is-invalid': errors.email }"
                type="email"
                placeholder="john@example.com"
                required
              />
            </div>
            <div class="grid gap-2">
              <Label for="password">Password</Label>
              <Input
                id="password"
                v-model="form.password"
                :class="{ 'is-invalid': errors.password }"
                type="password"
              />
            </div>
            <div class="grid gap-2">
              <Label for="confirm-password">Confirm Password</Label>
              <Input
                id="confirm-password"
                v-model="form.password_confirmation"
                :class="{ 'is-invalid': errors.password_confirmation }"
                type="password"
              />
            </div>
            <Button type="submit" class="w-full"> Create an account </Button>
            <!-- <Button variant="outline" class="w-full">
                Sign up with GitHub
                </Button> -->
          </div>
        </form>

        <div class="mt-4 text-center text-xs">
          Already have an account?
          <Link :href="signIn" class="underline"> Sign in </Link>
        </div>
      </CardContent>
    </Card>
  </div>
</template>