---
extends: _layouts.post
section: content
title: First Steps With Kotlin
date: 2018-03-11 20:30:00
tags: Kotlin, Progress
---

I try to learn a new language every year (if not every six months) and build something with it.

I tinkered around with Kotlin on the online playground and found it to be really fun.

I wrote a simple `parseInt` function. I realize there's probably a library function for this but it was something easy to do.

Here's my function:

```kotlin
fun parseInt(s: String): Int {
    var num = 0
    var j = 1
    var i = s.length - 1
    
    while (i >= 0) {
        val c = s[i].toInt()

        if (c < 48 || c > 58) {
            i -= 1
            continue
        }
        
        num += powBase10(j - 1) * (c - 48)
        i -= 1
        j += 1
    }
    
    return num
}
```

Basically we're traversing the string from the right to left and ignoring any characters that are not numeric.

Once we hit the numeric part of the string we add the power of ten it belongs in times the 'numeric' value of the character.

Here's my `powBase10` implementation (I didn't implement negative powers):

```kotlin
fun powBase10(a: Int): Int {
    if (a < 0) {
        return 10
    }

    if (a == 0) {
        return 1
    }

    return 10 * powBase10(a - 1)
}
```

All in all I found the experience of using Kotlin to be pretty fun. I would love to do a project with it sometime!
