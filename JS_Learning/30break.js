label:
for (let i = 0; i < 1; i++) {
    for (let j = 0; j < 1; j++) {
        console.log("Text 1");
        break label;
        console.log("Text 2");
    }
    console.log("Text 3");
}

