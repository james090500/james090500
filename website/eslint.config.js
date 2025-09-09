import pluginVue from 'eslint-plugin-vue'
export default [
    ...pluginVue.configs['flat/strongly-recommended'],
    {
        rules: {
            "vue/html-indent": ["error", 4, {
                "attribute": 1,
                "baseIndent": 1,
                "closeBracket": 0,
                "alignAttributesVertically": true,
                "ignores": []
            }],
            "vue/max-attributes-per-line": ["error", {
                "singleline": {
                    "max": 4
                },
                "multiline": {
                    "max": 4
                }
            }]
        },
        languageOptions: {
            globals: {
                axios: "readonly",
                bootstra: "readonly"
            }
        }
    }
]