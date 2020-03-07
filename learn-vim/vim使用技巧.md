# web开发人员的vim学习指南

>-作者：heguohui2018

<!-- vim-markdown-toc GFM -->

- [简介](#简介)
- [基本键位映射](#基本键位映射)
- [基本命令](#基本命令)
    - [命令列表](#命令列表)
- [文本对象](#文本对象)
    - [文本对象列表](#文本对象列表)
- [文件操作](#文件操作)
- [多窗口](#多窗口)
- [web开发人员必备vim插件](#web开发人员必备vim插件)
	* [emmet-vim](#emmet-vim)
	* [web开发人员必备vim插件](#web开发人员必备vim插件)
	* [web开发人员必备vim插件](#web开发人员必备vim插件)
	* [web开发人员必备vim插件](#web开发人员必备vim插件)
	* [web开发人员必备vim插件](#web开发人员必备vim插件)
	* [web开发人员必备vim插件](#web开发人员必备vim插件)
- [vim帮助文档](#vim帮助文档)
- [vim资源列表](#vim资源列表)

## 简介
    vim和emacs两大比较出名的编辑器，都有很长的历史了，
    vim是一种模态编辑器，所谓模态即是指模式状态，在vim中的三大模式状态分别为：mormal(普通模式)，insert(插入模式)，command(命令模式)，
    在mormal模式下，任何在编辑区域试图输入任何内容都是无效的，是无法输入任何字符，刚开始使用时可能觉得比较难用，怪异，当你理解vim的设计时，作为一名开发者，
    大部分时间都应该在阅读，和调试代码，很少一直处于输入的状态，

## neovim及其插件的安装
	brew install neovim
	
	python依赖
	pip3 install --user neovim

	npm依赖
	npm -g install neovim

	ruby依赖
	gem install neovim

	vim-plug插件管理器

```curl
	curl -fLo ~/.local/share/nvim/site/autoload/plug.vim --create-dirs \
	https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
```

	coc.nvim代码补全插件
```vim
	cocinstall coc-html coc-css coc-json coc-phpls coc-python coc-snippets
	coc-git coc-translator coc-svg coc-tsserver coc-explorer coc-lists coc-prettier coc-sources
	coc-highlight coc-vetur coc-diagnostic
```

	vscode代码片段
```vim
	cocinstall  https://github.com/sdras/vue-vscode-snippets
	cocinstall	https://github.com/abusaidm/html-snippets
	cocinstall  https://github.com/DonJayamanne/jquerysnippets
```


## 基本键位映射
    与绝大多数的编辑器最大不同在于，vim是区分模式的，而一些其他软件，例如：`word`,`notepad`,以及一些程序员使用的开发工具，当打开软件时，默认处于编辑状态，，你就可以往文件内输入东西，


    
            k                                              向上移动一行

        h       l       ------------>      向左移动一个字符            向右移动一个字符


            j                                               向下移动一行


    

## 基本命令





## 文本对象




## 文件操作







## 多窗口



## web开发人员必备vim插件

### [ emmet-vim ](https://github.com/mattn/emmet-vim)

	安装:
	Plug 'mattn/emmet-vim',{ 'for': ['html', 'css','scss'] }

	配置:
	let g:user_emmet_install_global = 0
	let g:user_emmet_mode='i' 
	autocmd FileType html,css EmmetInstall

	emmet-vim:号称前端开发的神器，他为开发人员节约了不少生命，下面介绍一下他的主要用法
	emmet-vim的默认快捷键为 <c-y>,

### [ html5.vim ](https://github.com/othree/html5.vim)

	Plug 'othree/html5.vim',{'for':['html']}

	html5语法插件

### [ tagalong.vim](https://github.com/AndrewRadev/tagalong.vim)

	Plug 'AndrewRadev/tagalong.vim',{'for':['html']}

	html标签重命名插件

### [ vim-css3-syntax ](https://github.com/hail2u/vim-css3-syntax)

	Plug 'hail2u/vim-css3-syntax',{'for':['css','scss']}

	css语法插件

### [ vim-css-color ](https://github.com/ap/vim-css-color)

	Plug 'ap/vim-css-color' 

	这是一款预览颜色的插件

## vim帮助文档





## vim资源列表
