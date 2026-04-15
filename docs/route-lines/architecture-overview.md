# Architecture Overview
## ꓘroot:
	$sys = The routing to the primary module. 
		Can control everything, including the shell
	$dom = The domain within the primary module.
		Can control all aspects of the material inside the shell.
	$mod = The display site within the $sys/$dom
		Can only control the colors of stylesheets of the shell.
---
### $sys
	$sys 'TERMINAL' (prime control terminals)
	$sys 'WWW' (web presenses)
	$sys 'STUDIO' (applications for MIRAStudio)


# >| avail.functions

```
resolveShell(); - Determine which SYSTEM to route to.
```

