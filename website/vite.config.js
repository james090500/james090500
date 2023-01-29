import { fileURLToPath, URL } from 'node:url'
import process  from 'node:process'

import { defineConfig } from 'vite'
import { createHtmlPlugin } from 'vite-plugin-html'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [
        vue(),
        createHtmlPlugin({ inject: { data: { BASE_URL: process.env.CF_PAGES_URL ?? "http://localhost:5173" }}})
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./src', import.meta.url))
        }
    }
})
