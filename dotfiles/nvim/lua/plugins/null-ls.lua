-- Create a new file: ~/.config/nvim/lua/plugins/null-ls.lua
return {
  "nvimtools/none-ls.nvim",
  dependencies = {
    "williamboman/mason.nvim",
  },
  config = function()
    local null_ls = require("null-ls")

    null_ls.setup({
      sources = {
        -- Formatting
        null_ls.builtins.formatting.prettier,     -- JavaScript, TypeScript, HTML, CSS
        null_ls.builtins.formatting.black,        -- Python
        null_ls.builtins.formatting.phpcsfixer,   -- PHP
        null_ls.builtins.formatting.clang_format, -- C/C++
        null_ls.builtins.formatting.csharpier,    -- C#
        null_ls.builtins.formatting.shfmt,        -- Bash

        -- Diagnostics
        null_ls.builtins.diagnostics.eslint,     -- JavaScript/TypeScript
        null_ls.builtins.diagnostics.phpstan,    -- PHP
        null_ls.builtins.diagnostics.flake8,     -- Python
        null_ls.builtins.diagnostics.shellcheck, -- Bash
      },
    })

    -- Format on save (optional)
    vim.cmd [[autocmd BufWritePre * lua vim.lsp.buf.format()]]
  end,
}
