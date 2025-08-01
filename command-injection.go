import (
	"context"
	"os"
	"os/exec"
)

func main() {
	directory := os.Args[1]
	ctx := context.Background()
	cmd := exec.CommandContext(ctx, "/bin/ls", directory)
	output, err := cmd.CombinedOutput()
}
