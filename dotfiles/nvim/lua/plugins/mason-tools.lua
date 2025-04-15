-- Create a new file: ~/.config/nvim/lua/plugins/mason-tools.lua
return {
  "WhoIsSethDaniel/mason-tool-installer.nvim",
  dependencies = {
    "williamboman/mason.nvim",
  },
  config = function()
    require("mason-tool-installer").setup({
      ensure_installed = {
        -- Formatters
        "prettier",
        "black",
        "php-cs-fixer",
        "clang-format",
        "csharpier",
        "shfmt",
        
        -- Linters
        "eslint_d",
        "phpstan",
        "flake8",
        "shellcheck",
        
        -- DAP (Debugging)
        "php-debug-adapter",
        "debugpy",
        "cpptools",
        "netcoredbg",  -- For C#
      },
      auto_update = true,
    })
  end,
}

