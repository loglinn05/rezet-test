<script type = "text/javascript">
    let strs = [
        ["Hello", "World"],
        ["Brad", "came", "to", "dinner", "with", "us"],
        ["He", "loves", "tacos"]
    ];
    let str_aligns = ["LEFT", "RIGHT", "LEFT"];
    out("test_3", "<p>strings: </p>", strs, "<hr>");
    out("test_3", "<p>alignments: </p>", str_aligns, "<hr>");
    out("test_3", "<p>result: </p>", formatText(strs, str_aligns));
</script>