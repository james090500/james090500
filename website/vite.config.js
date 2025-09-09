import { defineConfig } from 'vite'
import { cloudflare } from "@cloudflare/vite-plugin";
import { fileURLToPath, URL } from "url";
import vue from '@vitejs/plugin-vue'
import eslint from 'vite-plugin-eslint'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [
        cloudflare(),
        vue(),
        eslint()
    ],
    //TODO Remove - https://github.com/twbs/bootstrap/issues/40621
    css: {
        preprocessorOptions: {
            scss: {
                silenceDeprecations: [
                    "color-functions",
                    "global-builtin",
                    "import"
                ]
            },
        },
    },
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./src', import.meta.url))
        }
    }
})
