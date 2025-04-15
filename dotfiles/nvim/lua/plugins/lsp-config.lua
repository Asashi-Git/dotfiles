return {
  {
    "williamboman/mason.nvim",
    lazy = false,
    config = function()
      require("mason").setup()
    end,
  },
  {
    "williamboman/mason-lspconfig.nvim",
    lazy = false,
    opts = {
      auto_install = true,
      ensure_installed = {
        -- JavaScript/TypeScript - FIXED NAME
        "ts_ls", -- Changed from "typescript" to "tsserver"
        "eslint",

        -- PHP
        "intelephense",

        -- HTML/CSS
        "html",
        "cssls",
        "tailwindcss",

        -- Python
        "pyright",

        -- C/C++
        "clangd",

        -- C#
        "csharp_ls",

        -- Bash
        "bashls",

        -- Other servers
        "solargraph",
        "lua_ls",
      }
    },
  },
  {
    "neovim/nvim-lspconfig",
    lazy = false,
    config = function()
      local capabilities = require('cmp_nvim_lsp').default_capabilities()
      local lspconfig = require("lspconfig")

      -- JavaScript/TypeScript - FIXED NAME
      lspconfig.ts_ls.setup({ capabilities = capabilities }) -- Changed from typescript to tsserver
      lspconfig.eslint.setup({ capabilities = capabilities })

      -- PHP
      lspconfig.intelephense.setup({ capabilities = capabilities })

      -- HTML/CSS
      lspconfig.html.setup({ capabilities = capabilities })
      lspconfig.cssls.setup({ capabilities = capabilities })
      lspconfig.tailwindcss.setup({ capabilities = capabilities })

      -- Python
      lspconfig.pyright.setup({ capabilities = capabilities })

      -- C/C++
      lspconfig.clangd.setup({ capabilities = capabilities })

      -- C#
      lspconfig.csharp_ls.setup({ capabilities = capabilities })

      -- Bash
      lspconfig.bashls.setup({ capabilities = capabilities })

      -- Keep your existing configurations
      lspconfig.solargraph.setup({ capabilities = capabilities })
      lspconfig.lua_ls.setup({ capabilities = capabilities })

      -- Your keybindings
      vim.keymap.set("n", "K", vim.lsp.buf.hover, {})
      vim.keymap.set("n", "<leader>gd", vim.lsp.buf.definition, {})
      vim.keymap.set("n", "<leader>gr", vim.lsp.buf.references, {})
      vim.keymap.set("n", "<leader>ca", vim.lsp.buf.code_action, {})
    end,
  },
}
